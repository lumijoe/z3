# zero003
# z3
# 10月要件
　
①検索機能の充実、②IR、③ニュース、④サステナ、⑤企業情報、⑥製品ページ
↓
①製品画像を視覚的に配置させ、ハッシュタグ、アコーディオン、ACFの充実、ハッシュタグ比較が可能
②IR情報：参考サイトものを使用
③ニュース：一般、IR、サステナを利用するが　だし分けが必要
●一般ニュース投稿→トップの一般に表示
●サステナニュース投稿→トップの一般に混ざって表示、サステナページトップに表示
●IRニュース投稿→トップのIRに表示、IRページトップに表示
④サステナ：ESGとデータなどシンプルに表示
⑤企業情報：シンプルにする
⑥製品ページ：画像の視覚化とハッシュタグ配置

## ACFとSCFについて
必要なカスタム
①ニュース投稿
②製品投稿、新製品開発段階のもの投稿（分野とは別にページがあると良いかも？）
③IR資料投稿

## 印刷時のヘッダー追従をプリントアウトしない方法
@media printというCSSメディアクエリ
印刷時に特定のスタイルを適用する
追従型ヘッダーが全ページに表示されないようにするために、例えば以下のようなCSSコードを追加

css

@media print {
  /* 追従型ヘッダーを2ページ目以降で非表示にする */
  .fixed-header {
    display: none;
  }

  /* 1ページ目だけヘッダーを表示 */
  body:first-of-type .fixed-header {
    display: block;
  }
}

@media print: 印刷時にのみ適用されるスタイルを指定
.fixed-header: 追従型ヘッダーのクラス名（実際のクラス名に置き換え。
display: none;: 2ページ目以降ではヘッダーを非表示に。
body:first-of-type .fixed-header: 最初のページのみにヘッダーを表示。
これで印刷時に最初のページにだけヘッダーが表示され、2ページ目以降は印刷スペースを無駄にしないはず