@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/update.css') }}">
@endsection

@section('content')

<body class="detail_form">
    <div class="detail_form_size_adjuster">
        <div class="detail_form_title_holder">
            <div class="detail_form_title">
                <h5 class="detail_form_title_adjust">商品一覧＞<span style="margin-left:4px;color: rgba(122, 121, 121, 0.6);">{{ '  '.$product_record['name'] }}</span></h5>
            </div>
        </div>
        <form action="/products/{{ $product_record['id'] }}/update" method="post">
            @csrf
            <div class="detail_form_platform">
                <span class="move_image_to_horizontal_center">
                    <div class="detail_form_image_display">
                        <div class="detail_form_image_wrapper">
                            <img class="fruit_image" src="{{ asset('storage/'.$product_record['image'])}}">
                        </div>
                        <div class="detail_form_select_image">
                            <input type="file" id="" name="image" accept=".png, .jpeg, jpg" />
                            @if ($errors->has('image'))
                            <span style="color:red;">{{$errors->first('image')}}</span>
                            @endif
                        </div>
                    </div>
                </span>
                <div class="detail_form_input_container">
                    <label class="detail_form_input_column_name">商品名</label>
                    <input class="detail_form_input_value" type="text" name="name" value="{{ $product_record['name'] }}">
                    @if ($errors->has('name'))
                    <span style="color:red;">{{$errors->first('name')}}</span>
                    @endif
                    <div class="dummy_space"></div>
                    <label class="detail_form_input_column_name">値段</label>
                    <input class="detail_form_input_value" type="text" name="price" value="{{ $product_record['price'] }}">
                    @if ($errors->has('price'))
                    <span style="color:red;">{{$errors->first('price')}}</span>
                    @endif
                    <div class="dummy_space"></div>
                    <label class="detail_form_input_column_name">季節</label>
                    <div class="detail_form_radio_button_wrapper">
                        @if ($seasons->contains('name', '春'))
                        <input type="radio" name="season1" value="春" checked>春
                        @else
                        <input type="radio" name="season1" value="">春
                        @endif
                        <div class="dummy_space"></div>
                        @if ($seasons->contains('name', '夏'))
                        <input type="radio" name="season2" value="夏" checked>夏
                        @else
                        <input type="radio" name="season2" value="">夏
                        @endif
                        <div class="dummy_space"></div>
                        @if ($seasons->contains('name', '秋'))
                        <input type="radio" name="season3" value="秋" checked>秋
                        @else
                        <input type="radio" name="season3" value="">秋
                        @endif
                        <div class="dummy_space"></div>
                        @if ($seasons->contains('name', '冬'))
                        <input type="radio" name="season4" value="冬" checked>冬
                        @else
                        <input type="radio" name="season4" value="">冬
                        @endif
                    </div>
                </div>
            </div>
            <div class="detail_form_description_container">
                <div class="detail_form_description_sub_container">
                    <label class="detail_form_description_column_name">商品説明</label>
                    <textarea class="detail_form_description_input" name="description" cols="60" rows="4">{{ $product_record['description'] }}</textarea>
                    @if ($errors->has('description'))
                    <span style="color:red;">{{$errors->first('description')}}</span>
                    @endif
                </div>
            </div>
            <div class="detail_form_screen_width_define">
                <div class="detail_form_submit_button_container">
                    <span></span> <!-- ダミータグ --->
                    <div class="detail_form_main_buttons">
                        <div class="detail_form_submit_button">
                            <a href="/" class="detail_form_back_button">戻る</a>
                        </div>
                        <div class="detail_form_submit_button">
                            <button class="detail_form_update_button">変更を保存</button>
                        </div>
                    </div>
                    <a href="/softdelete/{{ $product_record['id'] }}" >
                        <img class="garbage_can_image" src="{{ asset('storage/ゴミ箱.png') }}" alt="ゴミ箱"/>
                    </a>
                </div>
            </div>
        </form>
        <form action=""></form>
    </div>
</body>
@endsection
