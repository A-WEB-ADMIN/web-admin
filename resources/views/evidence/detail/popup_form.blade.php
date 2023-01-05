
<!-- 양식선택 팝업 -->

<div class="pop" id="pop_list_choice">
    <div class="dim"></div>
    <div class="in">
        <h3>양식 선택</h3>
        <div class="contents">

            <div class="c-popSearch">
                <input type="text" name="" placeholder="검색" id="search_input">
            </div>

            <div class="c-popSearch__box">
                <ul>
                    <li> <a href="{{ request()->fullUrlWithQuery(['template_id'=>'1']) }}"> 정보보호관리체계 명세서 </a> </li>
                    <li> <a href="#"> 정보보호 운영명세서 </a> </li>
                    <li> <a href="#"> 정보서비스 업무 흐름도 </a> </li>
                    <li> <a href="#"> 위험관리 계획서 </a> </li>
                    <li> <a href="#"> 정보보호관리체계 명세서 </a> </li>
                    <li> <a href="#"> 정보보호 운영명세서 </a> </li>
                    <li> <a href="#"> 정보서비스 업무 흐름도 </a> </li>
                    <li> <a href="#"> 정보보호 운영명세서 </a> </li>
                    <li> <a href="#"> 정보서비스 업무흐름도 </a> </li>
                    <li> <a href="#"> 위험관리 계획서 </a> </li>
                    <li> <a href="#"> 정보보호관리체계 명세서 </a> </li>
                </ul>
            </div>

        </div>

        <a href="#;" class="close ok"><i class="far fa-plus"></i></a>
    </div>
</div>

<script>
    var search_input = document.querySelector('#search_input');

    var listItems = document.querySelectorAll('.c-popSearch__box li');
    console.log(listItems);

    /*============================================
    =
    =
    =============================================*/

    search_input.addEventListener('input', function()
    {
        var search = search_input.value.toLowerCase();

        listItems.forEach( function(li)
        {
            text = li.innerHTML.toLowerCase();

            found = text.indexOf(search);

            if(search == "")
            {
                li.style.display = 'block';
            }
            else if(found == -1)
            {
                li.style.display = 'none';
            }
            else
            {
                li.style.display = 'block';
            }

        });


        console.log(search);
    });

</script>
