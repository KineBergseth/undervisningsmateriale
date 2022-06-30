window.onload = (event) => {
    console.log('The page has fully loaded');
    document.getElementById("print_footer").innerHMTL = "dette er en footer";
};

function print_footer_content() {
	document.getElementById("print_footer").innerHMTL = "dette er en footer";
}