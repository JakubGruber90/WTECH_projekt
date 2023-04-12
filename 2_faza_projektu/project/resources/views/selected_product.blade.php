<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footwear shop</title>
    <link rel="stylesheet" href="{{ asset('storage/css/selected_product.css') }}">
</head>
<body>
    <!--Hlavička stránky-->
    @include('header')

    <div class="spacer">
        &nbsp;
    </div>

    <!-- PRODUCT -->
    <section class="product_section">
      <!-- fotky produktu -->
      <div class="photos">
        <img src="src/kb_1.jpg" alt=" ">
        <img src="src/kb_2.jpg" alt=" ">
        <img src="src/kb_3.jpg" alt=" ">
        <img src="src/kb_4.jpg" alt=" ">
      </div>

      <!-- velkost topanky -->
      <div class="shoe_info">
        <h1>@product_name</h1>
        <h2>@product_price</h2>
        <h3 class="h_shoe_size">Select shoe size (EU)</h3>
        <section class="shoe_size">
          <!--<div class="line" id="line_1">-->
          <label id="label_shoe_size_1"><input type="radio" id="shoe_size_1"><span>36</span></label>
          <label id="label_shoe_size_2"><input type="radio" id="shoe_size_2"><span>37</span></label>
          <label id="label_shoe_size_3"><input type="radio" id="shoe_size_3"><span>38</span></label>
          <label id="label_shoe_size_4"><input type="radio" id="shoe_size_4"><span>39</span></label>
          <label id="label_shoe_size_5"><input type="radio" id="shoe_size_5"><span>40</span></label>
          <!--</div>
          <div class="line" id="line_2">-->
          <label id="label_shoe_size_6" class="pad"><input type="radio" id="shoe_size_6"><span>40.5</span></label>
          <label id="label_shoe_size_7"><input type="radio" id="shoe_size_7"><span>41</span></label>
          <label id="label_shoe_size_8"><input type="radio" id="shoe_size_8"><span>41.5</span></label>
          <label id="label_shoe_size_9"><input type="radio" id="shoe_size_9"><span>42</span></label>
          <label id="label_shoe_size_10"><input type="radio" id="shoe_size_10"><span>42.5</span></label>
          <!--</div>
          <div class="line" id="line_3">-->
          <label id="label_shoe_size_11"><input type="radio" id="shoe_size_11"><span>43</span></label>
          <label id="label_shoe_size_12"><input type="radio" id="shoe_size_12"><span>43.5</span></label>
          <label id="label_shoe_size_13"><input type="radio" id="shoe_size_13"><span>44</span></label>
          <label id="label_shoe_size_14"><input type="radio" id="shoe_size_14"><span>44.5</span></label>
          <label id="label_shoe_size_15"><input type="radio" id="shoe_size_15"><span>45</span></label>
          <!--</div>-->
        </section>

        <!-- pridat do kosika -->
        <br>
        <label id="sklad" class="count"><span>Na sklade: @count</span></label>
        <br>
        <button id="add_to_cart"><img src="src/add_to_cart.png" alt=" "> Add to Cart</button>
        <br><br><br><br>
        <label id="rating" class="rating"> <span>Hodnotenie: @rating</span></label>
      </div>
    </section>

    <!--Nožička stránky-->
    @include('footer')
</body>
</html>