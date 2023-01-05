/*==========================================================
=
= 1. Alert
=
===========================================================*/
var alert_href = function(message, href)
{
    var text = '';
    swal({
            title : message,
            text : text,
            type : "success",
            confirmButtonClass : "btn-danger",
            confirmButtonText : "예",
            closeOnConfirm : false,
            closeOnCancel : true
        },
        function(isConfirm)
        {
            if (isConfirm)
            {
                location.href = href;
            }
            else
            {
                return false;
            }
        });
}
/*==========================================================
=
= 2.
=
===========================================================*/


