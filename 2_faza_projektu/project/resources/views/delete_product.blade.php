<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footwear shop</title>
    <link rel="stylesheet" href="{{ asset('storage/css/forgotten_password.css') }}">
</head>
<body>
    <!--Hlavička stránky-->
    @include('header')

    <div class="spacer">
        &nbsp;
    </div>

    <!-- DELETE PRODUCT -->
    <section class="canvas">
      <h1></h1>
      <!-- id field, text, picture -->
      <section>
          <form>
            <h2>Vymazať produkt z ponuky</h2>
            <br>
            <input type="text" placeholder="ID produktu" id="id_field"><br>
            <br>
          </form>
        <img src="{{ asset('storage/src/delete_product.png') }}" alt=" ">
      </section>
      <!-- forgotten password email confirmation button -->
      <button id="confirm_button" onclick="confirm_deletion()">Vymazať</button>
    </section>

    <!--Nožička stránky-->
    @include('footer')

    <script>
      function confirm_deletion() {
        if (document.getElementById('id_field').value == "") {
            return;
        }
        else {
            window.replace.location('{{ redirect('/admin/edit-product')->headers->get('Location') }}/' + document.getElementById('id_field').value);
        }
      }
    </script>
</body>
</html>