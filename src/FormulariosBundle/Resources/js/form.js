
var frm_resultCallback;

/**
 * Sends the ajax request to the specified controller
 * extras is an optional object with parameters to send along with the request
 * Optionally can be specified "resultCallback" as part of the extra parameters
 */
function send( action, extras, nonBlock )
{
    frm_resultCallback = null;
    
    fnresultCallback = null;
    if ( extras && extras.resultCallback ){
        fnresultCallback = extras.resultCallback;
    }
    $('.required').removeClass('required');
    $.ajax({
            data: readParameters(action, extras),
            dataType:'json',
            cache: false,
            type: 'post',
            timeout: 3500000,
            resultCallback: fnresultCallback,
            error: function(request, textStatus, errorThrown)
            {
                    //Notes:
                    //    -When there is an ajax timeout, textStatus is "timeout"
                    //
                    //    -When there is a php error, textStatus is "parsererror". Here, "parseerror" means
                    //     that jQuery was expecting a json ajax response and couldn't parse whatever it received.
                    //
                    var alertMessage;
                    if (textStatus == "timeout") {
                        alertMessage = "Error: Se ha exedido el tiempo de respuesta máximo.";
                    } else {
                        alertMessage = "Error: No se pudo realizar la comunicación con nuestros servidores.";
                    }
                    var requestText = "";
                    if (request.responseText && request.responseText != "") {
                        requestText = "    Request text: \n-------\n'" + request.responseText + "'\n-------\n";
                    }
                    var details = "\n\n"
                        + "Detailed info: \n"
                        + "    Request status: '" + request.status + "'\n"
                        + "    Text status: '" + textStatus + "'\n"
                        + "    Time: '" + new Date() + "'\n"
                        + requestText;

                    //Uncommented automatically:
                    //RELEASE details = "";

                    alert(alertMessage + details);
            },
            success: loadData
    });
    return false;
};

function loadData( obj, textStatus, jqXHR ) {
    /* the sub callback */
    resultCallback = null;
    if ( this.resultCallback ){
        resultCallback = this.resultCallback;
    }
    
    /* if evaluation is needed */
    xeval = null;
    
    jQuery.each(obj, function(i, value) {
        switch (i) {
            case "Error":
                alert(String(value));
                break;
            case "Message":
                alert(String(value));
                break;
            case "Modal":
                $('#'+i).html(String(value));
                var xtitle = $('#Modal > h3').html();
                $('#'+i).show();
                $('#'+i).dialog({
                        autoOpen : true,
                        modal : true,
                        title : xtitle,
                        height : 500,
                        width : 780});
                break;
            case "Eval":
                xeval = String(value);
                break;
            case "Result":
                if ( resultCallback ){
                     resultCallback(value);
                }
                break;
            default:
                $('#'+i).html(String(this));
                break;
        }
    });
    if ( xeval ) eval ( xeval );
    domChanged();
}

function readParameters( action, extras ) {
   var obj = {};
   $(':input').each(function( idx , el ) {
       
       if ((this.type == 'checkbox' || this.type == 'radio')) {
           if (this.checked) {
               obj[this.id] = this.value
           }
       }
       else {
           if ( el.tagName.toLowerCase() == "select" ){
              obj[this.id] = $('#'+ el.id).val();
           }else{
              obj[this.id] = el.value;
              
           }
            

       }
    });
    if (extras) {
        for (var i in extras) {
            if (i != "resultCallback") {
                obj[i] = extras[i];
            }
        }
    }
    obj.action = action;
    return obj;
};

function domChanged(){

    $("input[type=submit], input[type=button],button,.btn").button();

    /**
     * manejador de opciones de menu
     */
    $(".opcion").click(function(event) {

        event.preventDefault();
                

        $(".submenu").each(function(element) {
            // oculto todos
            $(this).hide();
        });
        
        $(".header").css("height", "120");
            $(this).parent().find(".submenu").slideToggle("fast", function() {
            $(this).show();
        });
        
    });

 

    /**
     * activo todos los tooltips del sistema
     */
    $("[title]").tooltip({
        track: true
    });

    $("#tabs, .tabs").tabs();

    /**
     * campos fecha
     */
    $(".campo_fecha").datepicker({changeMonth: true, changeYear: true, yearRange: "1900:+0"});

    var btn_movil = $('#nav-mobile'), menu = $('#menu').find('ul');

    // Al dar click agregar/quitar clases que permiten el despliegue del menú
    btn_movil.on('click', function(e) {
        e.preventDefault();

        var el = $(this);

        el.toggleClass('nav-active');
        menu.toggleClass('open-menu');
    });

}

function initUploader( key , urlbase ){
    var url = urlbase + key;
    $('#' + key ).fileupload({
        url: url,
        acceptFileTypes: /(\.|\/)(pdf)$/i,
        dataType: 'json',
        autoUpload: true,
        maxChunkSize: 300000, // 3 MB
        maxFileSize: 1000000, // 10 MB
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                if (file.error == 0) {
                    $('#' + e.target.id + '_files').text( 
                            "Archivo " + file.name + " adjuntado correctamente." );
                    return;
                } else if (file.error) {
                   $('#' + e.target.id + '_files').text( "Error: " + file.error );
                }
            } );
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#' + e.target.id + '_progress .progress-bar').css(
                'width',progress + '%'
            );
        },
        fileuploadfail: function (e,data) {

            $('#' + e.target.id + '_progress .progress-bar').css(
                'width','0%'
            );

            $('#' + e.target.id + '_files').text( "Error al subir archivo" );

        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');

}

domChanged();