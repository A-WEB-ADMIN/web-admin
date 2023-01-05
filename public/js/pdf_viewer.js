/*===============================================
=
=  1.
=
================================================*/
var state = {
    pdf: null,
    currentPage: 1,
}

var pdfviewer__left = document.querySelector("#pdfviewer__left");
var pdfviewer__right = document.querySelector("#pdfviewer__right");
/*===============================================
=
=  2.
=
================================================*/
pdfjsLib.getDocument(pdf_path).then((pdf) => {
    state.pdf = pdf;
    render();
});
/*===============================================
=
=  3.
=
================================================*/
function render()
{
    console.log("__render__");
    state.pdf.getPage(state.currentPage).then( (page) =>
    {
        var my_canvas = document.querySelector("#my_canvas");
        var context = my_canvas.getContext("2d");

        var viewport = page.getViewport(1);

        my_canvas.width = viewport.width;
        my_canvas.height = viewport.height;

        page.render({
            canvasContext: context,
            viewport: viewport
        });

    });
}
/*===============================================
=
=  4.
=
================================================*/
pdfviewer__left.addEventListener('click', function(event){

    if( state.pdf==null || state.currentPage == 1)
    {
        return false;
    }

    state.currentPage =  state.currentPage -1;

    render();
});
/*===============================================
=
=  5.
=
================================================*/
pdfviewer__right.addEventListener('click', function(event) {

    console.log(state.pdf._pdfInfo.numPages);

    if( state.pdf==null || state.currentPage >= state.pdf._pdfInfo.numPages )
    {
        console.log("__22");
        return false;
    }
    console.log("__222");
    state.currentPage = state.currentPage + 1;

    render();
});










