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
        <td>問題文</td>
        <td>{{$item->question}}</td>
    

        <ul>
        <li>下から答えを選んでください</li>
        </ul>

        <form method="POST" action="/helloo/index3">
            @csrf
    
            <input type="hidden" name="chapter" value={{$data['chapter']}} >
            <input type="hidden" name="section" value={{$data['section']}}>
            <input type="hidden" name="number" value={{$data['number']}}>
            <input type="radio" name="myanswer" value="{{$item->option1}}">{{$item->option1}}
            <input type="radio" name="myanswer" value="{{$item->option2}}">{{$item->option2}}
            <input type="radio" name="myanswer" value="{{$item->option3}}">{{$item->option3}}
            <input type="submit">
        </form>
    @endif
@endforeach
</tr>

<a href="/hello/index3/{{$data['chapter']}}/{{$data['section']}}/<?php print($data['number']+1); ?>" >次の問題に進む</a>
<a href="/hello/index" >メニューに戻る</a>

</body>
</html>