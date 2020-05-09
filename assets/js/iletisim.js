function ValidateEmail(mail)
{
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
    {
        return (true)
    }
    return (false)
}

function Validatename(name)
{
    var name_parts = (name.split(" "));
    if(name_parts.length<2)
        return false;
    return true;
}

jQuery(function () {
    $("#sendButton").on('click', function () {

        var formEmail = $("#email");
        var formName = $("#name");

        if( !Validatename(formName.val()) )
        {
            alert("Lütfen geçerli bir ad soyad giriniz.")
        }

        if(!ValidateEmail( formEmail.val()))
        {
            alert("Lütfen geçerli bir e-posta adresi giriniz");
            return;
        }

        $("#iletisimform").submit();

    });
});