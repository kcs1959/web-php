function onClick() {
    alert("ボタンが押されました");
}

function addMessage() {
    let list = document.getElementById("list");
    list.innerHTML += list.innerHTML + "<p>こんにちは！</p>";
}