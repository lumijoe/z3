## スタイルガイドのルール
・小さい文字は10px
 ニュースの日付に関しては小

・h1
・h2
・h3
などの文字サイズと余白などを決めていく必要がある


## sytlclassの変更：横一列から一部横、縦
.list-wrapper {
            width: auto;
            border-bottom: 0.7px solid #6a6a6a;
            padding-top: 8px;
            padding-bottom: 8px;
            display: grid;
            align-items: center;
            gap: 3px;
            font-size: 14px;
            height: auto;
            // 横一列の場合
            // grid-template-columns: 0.1fr 0.5fr 2fr;
            // height: 60px;
            &--row {
                display: flex;
                flex-direction: row;
            }
            
            .news-day {
                font-size: 12px;
            }
            .l-news-text {
                font-size: 12px;
            }
        }
