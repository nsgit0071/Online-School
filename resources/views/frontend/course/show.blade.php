    <x-main>


        <!-- ======= About Section ======= -->
        <section style="margin-top: 100px" id="about" class="about">
            <div class="container-fluid">

                <div class="row ">
                    <div class="col-md-6 intros text-end">
                        <div class="video-box">
                            <img style="width: 650px ; height: 650px" src="{{ asset('storage/' .$course->photo) }}" alt="video illutration"
                                 class="img-fluid">
                            <a href="{{ $course->youTube_link }}" class="glightbox position-absolute top-50 start-50 translate-middle">
                  <span>
                    <i class="fas fa-play-circle"></i>
                  </span>
                                <span class="border-animation border-animation--border-1"></span>
                                <span class="border-animation border-animation--border-2"></span>
                            </a>
                        </div>
                    </div>

                    <div
                        class="col-xl-5 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <button data-text="Awesome" class="category">
                            <span class="actual-text">&nbsp;{{ $course->category->name }}&nbsp;</span>
                            <span class="hover-text" aria-hidden="true">&nbsp;{{ $course->category->name }}&nbsp;</span>
                        </button>
                        <h3>{{ $course->heading }}</h3>
                        <p style="text-align: justify">{{ $course->paragraph_view }}</p>




                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->
        <div class="container">
            <div class="card checkout" style="width: 100%;height: 100px;margin: 10px ">
                <label class="title">Narx</label>

                <div class="checkout--footer">
                    <label class="price">{{ $course->prise }}</label>
                    <a href="{{ route('tasdiq')}}"><button class="checkout-btn">Sotib olish</button></a>
                </div>
            </div>
        </div>

    </x-main>

    <style>
        .master-container {
            display: grid;
            grid-template-columns: auto;
            gap: 5px;
        }

        .card {
            width: 400px;
            background: #FFFFFF;
            box-shadow: 0px 187px 75px rgba(0, 0, 0, 0.01), 0px 105px 63px rgba(0, 0, 0, 0.05), 0px 47px 47px rgba(0, 0, 0, 0.09), 0px 12px 26px rgba(0, 0, 0, 0.1), 0px 0px 0px rgba(0, 0, 0, 0.1);
        }

        .title {
            width: 100%;
            height: 40px;
            position: relative;
            display: flex;
            align-items: center;
            padding-left: 20px;
            border-bottom: 1px solid #efeff3;
            font-weight: 700;
            font-size: 11px;
            color: #63656b;
        }

        /* cart */
        .cart {
            border-radius: 19px 19px 7px 7px;
        }

        .cart .products {
            display: flex;
            flex-direction: column;
            padding: 10px;
        }

        .cart .products .product {
            display: grid;
            grid-template-columns: 60px 1fr 80px 1fr;
            gap: 10px;
        }

        .cart .products .product span {
            font-size: 13px;
            font-weight: 600;
            color: #47484b;
            margin-bottom: 8px;
            display: block;
        }

        .cart .products .product p {
            font-size: 11px;
            font-weight: 600;
            color: #7a7c81;
        }

        .cart .quantity {
            height: 30px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            margin: auto;
            background-color: #ffffff;
            border: 1px solid #e5e5e5;
            border-radius: 7px;
            filter: drop-shadow(0px 1px 0px #efefef)
            drop-shadow(0px 1px 0.5px rgba(239, 239, 239, 0.5));
        }

        .cart .quantity label {
            width: 20px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-bottom: 2px;
            font-size: 15px;
            font-weight: 700;
            color: #47484b;
        }

        .cart .quantity button {
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 0;
            outline: none;
            background-color: transparent;
            padding-bottom: 2px;
        }

        .card .small {
            font-size: 15px;
            margin: 0 0 auto auto;
        }

        .card .small sup {
            font-size: px;
        }

        /* coupons */
        .coupons {
            border-radius: 7px;
        }

        .coupons form {
            display: grid;
            grid-template-columns: 1fr 80px;
            gap: 10px;
            padding: 10px;
        }

        .input_field {
            width: auto;
            height: 36px;
            padding: 0 0 0 12px;
            border-radius: 5px;
            outline: none;
            border: 1px solid #e5e5e5;
            filter: drop-shadow(0px 1px 0px #efefef)
            drop-shadow(0px 1px 0.5px rgba(239, 239, 239, 0.5));
            transition: all 0.3s cubic-bezier(0.15, 0.83, 0.66, 1);
        }

        .input_field:focus {
            border: 1px solid transparent;
            box-shadow: 0px 0px 0px 2px #242424;
            background-color: transparent;
        }

        .coupons form button {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 10px 18px;
            gap: 10px;
            width: 100%;
            height: 36px;
            background: linear-gradient(180deg, #4480FF 0%, #115DFC 50%, #0550ED 100%);
            box-shadow: 0px 0.5px 0.5px #EFEFEF, 0px 1px 0.5px rgba(239, 239, 239, 0.5);
            border-radius: 5px;
            border: 0;
            font-style: normal;
            font-weight: 600;
            font-size: 12px;
            line-height: 15px;
            color: #ffffff;
        }

        /* Checkout */
        .checkout {
            border-radius: 9px 9px 19px 19px;
        }

        .checkout .details {
            display: grid;
            grid-template-columns: 3fr 1fr;
            padding: 10px;
            gap: 5px;
        }

        .checkout .details span {
            font-size: 13px;
            font-weight: 600;
        }

        .checkout .details span:nth-child(odd) {
            font-size: 11px;
            font-weight: 700;
            color: #707175;
            margin: auto auto auto 0;
        }

        .checkout .details span:nth-child(even) {
            font-size: 13px;
            font-weight: 600;
            color: #47484b;
            margin: auto 0 auto auto;
        }

        .checkout .checkout--footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 10px 10px 20px;
            background-color: #efeff3;
        }

        .price {
            position: relative;
            font-size: 22px;
            color: #2B2B2F;
            font-weight: 900;
        }

        .price sup {
            font-size: 13px;
        }

        .price sub {
            width: fit-content;
            position: absolute;
            font-size: 11px;
            color: #5F5D6B;
            bottom: 5px;
            display: inline-block;
        }

        .checkout .checkout-btn {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            width: 150px;
            height: 36px;
            background: linear-gradient(180deg, #4480FF 0%, #115DFC 50%, #0550ED 100%);
            box-shadow: 0px 0.5px 0.5px #EFEFEF, 0px 1px 0.5px rgba(239, 239, 239, 0.5);
            border-radius: 7px;
            border: 0;
            outline: none;
            color: #ffffff;
            font-size: 13px;
            font-weight: 600;
            transition: all 0.3s cubic-bezier(0.15, 0.83, 0.66, 1);
        }
        /* === removing default button style ===*/
        .category {
            margin: 0;
            height: auto;
            background: transparent;
            padding: 0;
            border: none;
        }

        /* button styling */
        .category {
            --border-right: 6px;
            --text-stroke-color: rgba(255,255,255,0.6);
            --animation-color: #37FF8B;
            --fs-size: 2em;
            letter-spacing: 3px;
            text-decoration: none;
            font-size: var(--fs-size);
            font-family: "Arial";
            position: relative;
            text-transform: uppercase;
            color: transparent;
            -webkit-text-stroke: 1px var(--text-stroke-color);
        }
        /* this is the text, when you hover on button */
        .hover-text {
            position: absolute;
            box-sizing: border-box;
            content: attr(data-text);
            color: var(--animation-color);
            width: 0%;
            inset: 0;
            border-right: var(--border-right) solid var(--animation-color);
            overflow: hidden;
            transition: 0.5s;
            -webkit-text-stroke: 1px var(--animation-color);
        }
        /* hover */
        .category:hover .hover-text {
            width: 100%;
            filter: drop-shadow(0 0 23px var(--animation-color))
        }

    </style>
