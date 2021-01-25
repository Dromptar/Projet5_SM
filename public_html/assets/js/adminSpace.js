
showMembers = document.querySelector(".showMembers");
showMembers.addEventListener("click", () => { hideAndShow();});


function hideAndShow()
{
    
        if ( members.style.display == "none") {
            members.style.display = "block";
        }

        else {
            members.style.display = "none";
        }

}