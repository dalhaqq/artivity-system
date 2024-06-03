<?php

namespace App\Http\Livewire;

use Imagick;
use Livewire\Component;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Livewire\WithFileUploads;
use Spatie\PdfToImage\Pdf;

class Uploader extends Component
{
    use WithFileUploads;
    public $ID,$edit, $Profile,$uploadedFile, $fileName, $Price, $bwPrice, $Halaman, $tempFile, $errorAPI, $imgPath, $totalPage;
    
    public function uploadPdf()
    {
        $this->resetvalidation();
        $this->reset('errorAPI');
        $this->reset('Price');
        $pdfFile = $this->uploadedFile;
        $this->fileValidation();

        if ($pdfFile) {
            $pdfPath = $pdfFile->path();
            $client = new Client();
            $price = 0;
            // Kirim gambar ke endpoint API
            try{
                $response = $client->post('http://127.0.0.1:5000/api/v3/upload', [
                'timeout' => 360,
                'headers' => [
                                'api-key' => getenv('API_KEY_PRICE_COUNTER'),
                ],
                'multipart' => [
                    [
                        'name' => 'file',
                        'filename' => $this->uploadedFile->getClientOriginalName(),
                        'contents' => fopen($this->uploadedFile->path(), 'r'),
                    ],
                ],
                ]);

                if ($response->getStatusCode() === 200) {
                $rspn = json_decode($response->getBody(), true);
                $tempfile = $this->uploadedFile;
                $filename = $this->uploadedFile->getClientOriginalName();
                $this->resetForm();
                $this->bwPrice = $rspn['bw_price'];
                $this->Price = $rspn['price'];
                $this->totalPage = $rspn['page'];
                $this->fileName = $filename;
                $this->tempFile = $tempfile->path();
                }else{
                    $rspn = json_decode($response->getBody(), true);
                    $message = $rspn['message'];
                    $this->resetForm();
                    $this->errorAPI = $message;
                }
            }catch(\Exception $e){
                $this->errorAPI = TRUE;
            }
        } else {
            $this->Price = "Error uploading file: " . $response->getBody();
        }
    }
    public function resetForm(){
        $this->reset();
        $this->resetvalidation();
    }
    public function fileValidation() {
        $this->validate(
            [
                'uploadedFile'              => 'required|mimes:pdf|max:51000',
            ],
            [
                'uploadedFile.required'     => 'Tidak ada berkas dokumen',
                'uploadedFile.max'          => 'Ukuran file terlalu besar (max 50mb)',
                'uploadedFile.mimes'        => 'Format file tidak valid',
            ]
        );
    }

    public function render()
    {
        if($this->uploadedFile){
            $this->Price =0;
        }
        return view('livewire.uploader');
    }
}
