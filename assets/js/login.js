function ValidateEmail(mail)
{
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
    {
        return (true)
    }
    return (false)
}

$(function () {
    $("#loginButton").on('click', function () {
        if(!ValidateEmail($("#inputEmail").val()))
        {
            alert("Lütfen geçerli bir e-posta adresi giriniz!");
            return;
        }
        $("#loginForm").submit();
    });
});