@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail
.css') }}">
@endsection

@section('content')

<body class="detail_form">
    <div><div class="detail_form_size_adjuster">
        <div class="detail_form_title_holder">
            <div class="detail_form_title">
                <h5 class="detail_form_title_adjust">商品一覧></h5>
            </div>
        </div>

        <div class="detail_form_platform">
            <span class="move_image_to_horizontal_center">
                <div class="detail_form_image_display">
                    <div class="detail_form_image_wrapper">
                        <img class="fruit_image" src="{{ asset('storage/詳細画面ストロベリー.png')}}">
                    </div>
                    <div class="detail_form_select_image">
                        <button class="detail_form_select_file_button">ファイルの選択</button>
                        <div class="detail_form_selected_image">ファイル名</div>
                    </div>
                </div>
            </span>
            <form class="detail_form_input_container">
                <label class="detail_form_input_column_name">商品名</label>
                <input class="detail_form_input_value" type="text">
                <div class="dummy_space"></div>
                <label class="detail_form_input_column_name">値段</label>
                <input class="detail_form_input_value" type="text">
                <div class="dummy_space"></div>
                <label class="detail_form_input_column_name">季節</label>
                <div class="detail_form_radio_button_wrapper">
                    <input type="radio">春
                    <div class="dummy_space"></div>
                    <input type="radio">夏
                    <div class="dummy_space"></div> <input type="radio">秋
                    <div class="dummy_space"></div> <input type="radio">冬
                </div>
            </form>
        </div>
        <div class="detail_form_description_container">
            <div class="detail_form_description_sub_container">
                <label class="detail_form_description_column_name">商品説明</label>
                <input class="detail_form_description_input" value="説明内容">
            </div>
        </div>
        <div class="detail_form_screen_width_define">
            <div class="detail_form_submit_button_container">
                <span></span> <!-- ダミータグ --->
                <div class="detail_form_main_buttons">
                    <form class="detail_form_submit_button">
                        <button class="detail_form_return_button">戻る</button>
                    </form>
                    <form class="detail_form_submit_button">
                        <button class="detail_form_update_button">変更を保存</button>
                    </form>
                </div>
                <form>
                    <button>ゴミ箱</button>
                </form>
            </div>
        </div>
    </div>
</body>
@endsection

