<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footwear shop</title>
    <link rel="stylesheet" href="{{ asset('storage/css/create_product.css') }}">
</head>
<body>
    <!--Hlavička stránky-->
    @include('header')

    <div class="spacer">
        &nbsp;
    </div>

    <!-- VYTVORENIE PRODUKTU -->
    <div class="canvas">
      <h1>Vytvorenie produktu</h1>
      <section class="all_input">
        <!-- meno,popis,cena -->
        <section class="input_section">
          <form>
            <br>
            <input type="text" placeholder="Meno produktu" id="name"><br>
            <br>
            <textarea type="text" rows="3" placeholder="Popis produktu" id="description" class="description"></textarea><br>
            <br>
            <input type="number" step=".01" placeholder="Cena produktu" id="price"><br>
          </form>
        </section>
        <!-- kategoria,material,znacka,farba -->
        <section class="input_section">
            <form>
              <br>
              <select title="category" class="categories" placeholder="Kategória produktu" id="category">
                <option value="Empty" class="empty" id="empty">Kategória produktu</option>
                <option value="Basketball">Basketball</option>
                <option value="Football">Football</option>
                <option value="Voleyball">Voleyball</option>
                <option value="Tennis">Tennis</option>
                <option value="Running">Running</option>
                <option value="Hiking">Hiking</option>
              </select><br><br>
              <input type="text" placeholder="Značka produktu" id="brand"><br>
              <br>
              <input type="text" placeholder="Farba produktu" id="color"><br>
              <br>
          </form>
        </section>
        <!-- velkosti,obrazky -->
        <section class="input_section">
            <form>
              <br>
              <select title="onsale" class="categories" placeholder="Kategória produktu" id="onsale">
                <option value="Empty" class="empty" id="empty">V akcií</option>
                <option value="True">Áno</option>
                <option value="False">Nie</option>
              </select><br>
              <br>
              <input type="text" placeholder="Veľkosti produktu (sid:sq;..)" id="sizes"><br>
              <br>
              <span class="files_label">Nahrať obrázky</span>
              <br>
          </form>
        </section>
      </section>
      <!-- potvrdenie vytvorenia -->
      <form method="POST" action="{{ route('createProduct') }}" accept-charset="UTF-8" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input id="input_name" type="hidden" name="name" value="">
        <input id="input_desc" type="hidden" name="desc" value="">
        <input id="input_price" type="hidden" name="price" step=".01" value="">
        <input id="input_category" type="hidden" name="cat" value="">
        <input id="input_brand" type="hidden" name="brand" value="">
        <input id="input_color" type="hidden" name="color" value="">
        <input id="input_sale" type="hidden" name="sale" value="">
        <input id="input_sizes" type="hidden" name="sizes" value="">
        <input type="file" id="images" class="input_files" multiple="multiple" accept=".jpg, .png" name="images[]">
        <button id="confirm_button" class="confirm_button">Vytvoriť produkt</button>
      </form>
    </div>

    <!--Nožička stránky-->
    @include('footer')

    <script>
      var elements = document.querySelectorAll('.categories');
      elements.forEach(element => {
        element.style.color = "#707070";
        element.addEventListener(('change'), (event) => {
          if (event.target.value != 'Empty') {
              event.target.style.color = "black";
          }
          else {
            event.target.style.color = "#707070";
          }
        });
      });
      
      document.getElementById('price').addEventListener(('change'), (event) => {
          if (parseFloat(event.target.value) <= 0) {
              event.target.value = 0;
          }
      });

      document.getElementById('confirm_button').addEventListener(('click'), () => {
          document.getElementById('input_name').value = document.getElementById('name').value;
          document.getElementById('input_desc').value = document.getElementById('description').value;
          document.getElementById('input_price').value = document.getElementById('price').value;
          document.getElementById('input_category').value = document.getElementById('category').value;
          document.getElementById('input_brand').value = document.getElementById('brand').value;
          document.getElementById('input_color').value = document.getElementById('color').value;
          document.getElementById('input_sale').value = document.getElementById('onsale').value;
          document.getElementById('input_sizes').value = document.getElementById('sizes').value;
      });
    </script>
</body>
</html>