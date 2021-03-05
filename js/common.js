$(function () {
    function showSub(obj) {

        f = document.forms.select_machine;

        if (obj == 1) {

            f.SUB0.style.display = "none";
            f.SUB1.style.display = "";
            f.SUB2.style.display = "none";
            f.SUB3.style.display = "none";
            f.SUB4.style.display = "none";
            f.SUB5.style.display = "none";

        } else if (obj == 2) {

            f.SUB0.style.display = "none";
            f.SUB1.style.display = "none";
            f.SUB2.style.display = "";
            f.SUB3.style.display = "none";
            f.SUB4.style.display = "none";
            f.SUB5.style.display = "none";

        } else if (obj == 3) {

            f.SUB0.style.display = "none";
            f.SUB1.style.display = "none";
            f.SUB2.style.display = "none";
            f.SUB3.style.display = "";
            f.SUB4.style.display = "none";
            f.SUB5.style.display = "none";

        } else if (obj == 4) {

            f.SUB0.style.display = "none";
            f.SUB1.style.display = "none";
            f.SUB2.style.display = "none";
            f.SUB3.style.display = "none";
            f.SUB4.style.display = "";
            f.SUB5.style.display = "none";

        } else if (obj == 5) {

            f.SUB0.style.display = "none";
            f.SUB1.style.display = "none";
            f.SUB2.style.display = "none";
            f.SUB3.style.display = "none";
            f.SUB4.style.display = "none";
            f.SUB5.style.display = "";

        } else if (obj == 0) {

            f.SUB0.style.display = "";
            f.SUB1.style.display = "none";
            f.SUB2.style.display = "none";
            f.SUB3.style.display = "none";
            f.SUB4.style.display = "none";

        }
        return false
    }
});