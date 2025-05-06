<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>KoTA 104 - Forecasting Penjualan</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f6f9;
      color: #333;
      line-height: 1.6;
    }

    header {
      background: linear-gradient(to right, #2c3e50, #34495e);
      color: white;
      padding: 3rem 5vw;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    header h1 {
      font-size: 2.5rem;
      margin-bottom: 0.5rem;
    }

    header h2 {
      font-weight: 400;
      font-size: 1.5rem;
      margin-bottom: 1rem;
    }

    header p {
      font-size: 1.2rem;
      max-width: 1000px;
      margin: 0 auto;
    }

    section {
      background-color: #fff;
      padding: 3rem 4rem;
      margin: 2rem auto;
      max-width: 1200px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }

    section h2 {
      font-size: 1.8rem;
      color: #2c3e50;
      margin-bottom: 1rem;
      border-left: 5px solid #2980b9;
      padding-left: 0.75rem;
    }

    section p {
      font-size: 1.1rem;
      line-height: 1.9;
      color: #555;
    }

    .images {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      margin-top: 2rem;
    }

    .images img {
      flex: 1 1 48%;
      width: 100%;
      border-radius: 10px;
      border: 1px solid #ddd;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .images img:hover {
      transform: scale(1.03);
      box-shadow: 0 6px 16px rgba(0,0,0,0.15);
    }

    @media (max-width: 768px) {
      section {
        padding: 2rem;
      }

      .images img {
        flex: 1 1 100%;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>KoTA 104</h1>
    <p><strong>PENGEMBANGAN FITUR FORECASTING PENJUALAN DENGAN METODE ARIMAX PADA APLIKASI MIRETA PT SELADA INDONESIA PRODUKTIF</strong></p>
  </header>

  <section>
    <h2>Deskripsi Singkat</h2>
    <p>
      Pengembangan sistem Point of Sales (POS) berbasis website dengan menambahkan fitur forecasting pada aplikasi yang sudah ada guna memprediksi jumlah penjualan dan kebutuhan bahan baku. Metode forecasting yang dipilih adalah model time series <strong>Autoregressive Integrated Moving Average With Exogenous Input (ARIMAX)</strong>. Model ini dipilih karena mampu memprediksi jumlah penjualan dengan mempertimbangkan faktor eksternal seperti hari libur. Dengan mempertimbangkan faktor tersebut, model ini dapat menghasilkan prediksi yang lebih akurat, sehingga membantu bisnis dalam perencanaan stok dan menghindari kelebihan atau kekurangan bahan baku berdasarkan pola penjualan yang sudah tercatat.
    </p>
  </section>

  <section>
    <h2>Ilustrasi / Gambar Pendukung</h2>
    <div class="images">
      <img src="/images/gambar1.jpg" alt="Grafik hasil forecasting">
      <img src="/images/gambar2.jpg" alt="Tampilan antarmuka POS">
    </div>
  </section>

</body>
</html>
