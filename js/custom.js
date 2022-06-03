function DMS_search() {
    var id = document.querySelector('#devicequery').value;
    window.open(`https://dms.parlevelvms.com/sn/${id}`);
};

function WAMP_search() {
    var id = document.querySelector('#wampquery').value;
    window.open(`http://dms.parlevel.io/devices/${id}`);
};

function copy_number(source) {
    var copied_text = '';
    if (source == 'usat') {
        copied_text = '1-888-561-4748';
    } else if (source == 'nayax') {
        copied_text = '410-666-3800';
    } else if (source == 'aircall') {
        copied_text = '1-888-240-6923';
    } else if (source == 'hubspot') {
        copied_text = '1-888-482-7768';
    }

    const temp = document.createElement('input');
    temp.setAttribute("value", copied_text);
    document.body.appendChild(temp);
    temp.select();
    document.execCommand("copy");
    document.body.removeChild(temp);
    alert(`The number to ${source.toUpperCase()} has been copied to your clipboard: ${copied_text}`);

}