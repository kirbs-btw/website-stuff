function doSome(){

  var content = cutContent(document.getElementById("content").value);

  document.getElementById('display').innerHTML = content;
  document.getElementById('content').value = "";
  // why does it not change the value
}

function cutContent(content){
  var new_content = "";

  for (var i = 0; i < content.length; i++) {
    if (i % 20 == 0) {
      new_content += "</br>"
    }
    new_content += content[i]
  }



  return new_content
}
