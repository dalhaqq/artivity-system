@extends('layouts.landing')

@section('title', 'Prediksi Harga')

@section('content')
    <section class="min-h-screen bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl">
            <h1>test pdf</h1>
            <div>
                <script src="mozilla.github.io/pdf.js/build/pdf.mjs" type="module"></script>
                
                <script>
                  const doc = new pdf.Document({
                  font: require('pdfjs/font/Helvetica'),
                  padding: 10
                  })
                  doc.pipe(fs.createWriteStream('output.pdf'))
                  
                  // render something onto the document
                  
                  
                </script>
                
                <h1>PDF.js 'Hello, world!' example</h1>
                
                <p>Please use <a href="https://mozilla.github.io/pdf.js/getting_started/#download"><i>official releases</i></a> in
                    production environments.</p>
                
                <canvas id="the-canvas"></canvas>
            </div>
        </div>
    </section>
@endsection
