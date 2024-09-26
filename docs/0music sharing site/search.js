
function hide() {
    var input, filters, table, tr, p, i, txtValue;
    input = document.getElementById("myInput");
    filters = input.value.toUpperCase().split('-').map(term => term.trim().replace(/\s+/g, '')); // Split by dash and clean up terms
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("p");
    let n = tr.length;
  
    for (i = 0; i < tr.length; i++) {
        p = tr[i];
        if (p) {
            txtValue = p.id + "|" + p.className + "|" + p.textContent || p.innerText;
            txtValue = txtValue.toUpperCase().replace(/\s+/g, '');

            // Check if any of the filters match
            let isMatch = filters.some(filter => txtValue.indexOf(filter) > -1);

            if (isMatch) {
                tr[i].style.display = "";
            } else {
                n = n - 1;
                tr[i].style.display = "none";
            }
        }
    }

    if (n == 1) {
        for (i = 0; i < tr.length; i++) {
            if (tr[i].style.display == "") {
                try {
                    tr[i].getElementsByTagName("audio")[0].preload = "auto";
                } catch {
                    // Do nothing if no audio tag exists
                }
            }
        }
    } else if (n < 5) {
        for (i = 0; i < tr.length; i++) {
            if (tr[i].style.display == "") {
                try {
                    tr[i].getElementsByTagName("audio")[0].preload = "metadata";
                } catch {
                    // Do nothing if no audio tag exists
                }
            }
        }
    }
}

function r() {
    document.getElementById("myInput").value=""
    hide()}

if(location.href.includes("\\")||location.href.includes(">"))
{
    document.title = "歌单"
    console.log(1);
}
if(location.href.includes("?"))
{
    var u = new URL(window.location.href).searchParams.get("search");
    document.getElementById("myInput").value = u;
    hide();
    document.title = document.getElementById(u).getElementsByTagName("a")[0].textContent.replace('敬拜', '敬█').replace('赞美', '赞█').replace('全能', '全█').replace('耶稣', '耶█').replace('基督', '█督').replace('约书亚', '约█亚')
}




//document.getElementById("myInput").value = location.href.substring(location.href.indexOf("?")+1);