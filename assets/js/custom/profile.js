// Get the modal
var modal = document.getElementById('myModal');
if(modal !== null) {
// Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg');
    if (img !== null && img.length) {
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        };
    }

// Get the <span> element that closes the modal
    $(document).on('load', function () {
        $(".close").on('click', function () {
            modal.style.display = "none";
        });
    });
    $(document).click(function (event) {
        //if you click on anything except the modal itself or the "open modal" link, close the modal
        if (!$(event.target).closest(".modal,img").length) {
            modal.style.display = "none";
        }
    });
}