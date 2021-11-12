<!-- ===============================Timers================================= -->
<script>
$(document).ready(function() {
$("#element_1").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime > 10) {
$("#element_1").show()
}
});
});
</script>
<script>
$(document).ready(function() {
$("#element_2").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime < 10) {
$("#element_2").hide()
}
if(this.currentTime > 10) {
$("#element_2").show()
}
if(this.currentTime > 17) {
$("#element_2").hide()
}
});
});
</script>
<script>
$(document).ready(function() {
$("#element_3").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime < 20) {
$("#element_3").hide()
}
if(this.currentTime > 20) {
$("#element_3").show()
}
if(this.currentTime > 28) {
$("#element_3").hide()
}
});
});
</script>
<script>
$(document).ready(function() {
$("#element_4").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime < 29) {
$("#element_4").hide()
}
if(this.currentTime > 29) {
$("#element_4").show()
}
if(this.currentTime > 36) {
$("#element_4").hide()
}
});
});
</script>
<script>
$(document).ready(function() {
$("#element_5").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime < 45) {
$("#element_5").hide()
}
if(this.currentTime > 45) {
$("#element_5").show()
}
if(this.currentTime > 51) {
$("#element_5").hide()
}
});
});
</script>
<script>
$(document).ready(function() {
$("#element_6").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime < 53) {
$("#element_6").hide()
}
if(this.currentTime > 53) {
$("#element_6").show()
}
if(this.currentTime > 58) {
$("#element_6").hide()
}
});
});
</script>
<script>
$(document).ready(function() {
$("#element_7").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime < 60) {
$("#element_7").hide()
}
if(this.currentTime > 60) {
$("#element_7").show()
}
if(this.currentTime > 69) {
$("#element_7").hide()
}
});
});
</script>
<script>
$(document).ready(function() {
$("#element_8").hide();
document.getElementById('video0').addEventListener("timeupdate", function() {
if(this.currentTime < 70) {
$("#element_8").hide()
}
if(this.currentTime > 70) {
$("#element_8").show()
}
if(this.currentTime > 83) {
$("#element_8").hide()
}
});
});
</script>