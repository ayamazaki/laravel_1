<html>
<head>
</head>
<body>
<ul>
<li>chapter:{{$data['chapter']}} / section:{{$data['section']}} / number:{{$data['number']}}</li>
</ul>

<tr>
@foreach ($items as $item)
    @if ($item->chapter == $data['chapter'] & $item->section == $data['section'] & $item->number == $data['number'])
        <td>問題文<br></td>
        <td>{{$item->question}}<br></td>
        <td>結果は
            <?php if($item->answer == $data['myanswer']){
                print('正解');
            }else{
                print('不正解');
            }
            ?><br></td>
        <td>正解は{{$item->answer}}<br></td>
        <td>あなたの答えは{{$data['myanswer']}}<br></td>
        <td>解説は{{$item->commentary}}<br></td>
    @endif
@endforeach
</tr>


<form method="POST" action="/helloo/index3">
    @csrf
    <!-- テキストボックス類をコメントアウト -->
    <input type="hidden" name="chapter">
    <input type="hidden" name="section">
    <input type="hidden" name="number">
    <!-- <input type="submit" name="myanswer" value="1"></button>
    <input type="submit" name="myanswer" value="2"></button>
    <input type="submit" name="myanswer" value="3"></button> -->
    <!-- <input type="submit"> -->
    <a href="/hello/index3/{{$data['chapter']}}/{{$data['section']}}/<?php print($data['number']); ?>" >もう一度解く</a>
    <a href="/hello/index3/{{$data['chapter']}}/{{$data['section']}}/<?php print($data['number']+1); ?>" >次の問題に進む</a>
    <a href="/hello/index" >メニューに戻る</a>
</form>
</body>
</html>