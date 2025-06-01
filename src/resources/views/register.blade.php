@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register
.css') }}">
@endsection

@section('content')

<body class="register_form">
    <div class="register_form_size_adjuster">
        <div class="register_form_title_holder">
            <div class="register_form_title">
                <h3 class="register_form_title_adjust">商品登録</h3>
            </div>
        </div>
        <form action="/products/register" method="post">
            @csrf
            <div class="register_form_platform">
                <div class="register_form_input_container">
                    <label class="register_form_input_column_name">商品名<span style="background-color: red;margin-left:4px;color:white;">必須</span></label>
                    <input class="register_form_input_value" type="text" name="name" value="商品を入力">
                    @if ($errors->has('name'))
                    <span style="color:red;">{{$errors->first('name')}}</span>
                    @endif
                    <div class="dummy_space"></div>
                    <label class="register_form_input_column_name">値段<span style="background-color: red;margin-left:4px;color:white;">必須</span></label>
                    <input class="register_form_input_value" type="text" name="price" value="値段を入力">
                    @if ($errors->has('price'))
                    <span style="color:red;">{{$errors->first('price')}}</span>
                    @endif
                    <label class="register_form_input_column_name">商品画像<span style="background-color: red;margin-left:4px;color:white;">必須</span></label>
                    <span class="move_image_to_horizontal_center">
                        <div class="register_form_image_display">
                            <div class="register_form_image_wrapper">
                                <img class="fruit_image" src="{{ asset('storage/'.$first_product['image'])}}">
                            </div>
                            <input class="register_form_select_file_button" name="image" type="file" id="" name="image" accept=".png, .jpeg, jpg" />
                            @if ($errors->has('image'))
                            <span style="color:red;">{{$errors->first('image')}}</span>
                            @endif
                        </div>
                    </span>
                    <label class="register_form_input_column_name">季節<span style="background-color: red;margin-left:4px;color:white;">必須</span><span style="color:red;margin-left:3px;">複数選択可</span></label>
                    <div class="register_form_radio_button_wrapper">
                        <input type="radio" name="season_id" value="1">春
                        <div class="dummy_space"></div>
                        <input type="radio" name="season_id" value="2">夏
                        <div class="dummy_space"></div>
                        <input type="radio" name="season_id" value="3">秋
                        <div class="dummy_space"></div>
                        <input type="radio" name="season_id" value="4">冬
                    </div>
                    @if ($errors->has('season_id'))
                    <span style="color:red;">{{$errors->first('season_id')}}</span>
                    @endif

                </div>
            </div>
            <div class="register_form_description_container">
                <div class="register_form_description_sub_container">
                    <label class="register_form_description_column_name">商品説明<span style="background-color: red;margin-left:4px;margin-left:4px;color:white;">必須</span></label>
                    <input class="register_form_description_input" name="description" nvalue="商品の説明を入力">
                    @if ($errors->has('description'))
                    <span style="color:red;">{{$errors->first('description')}}</span>
                    @endif
                </div>
            </div>
            <div class="register_form_screen_width_define">
                <div class="register_form_submit_button_container">
                    <div class="register_form_main_buttons">
                        <div class="register_form_submit_button">
                            <a href="/" class="register_form_back_button">戻る</a>
                        </div>
                        <div class="register_form_submit_button">
                            <button class="register_form_update_button">登録</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
@endsection
