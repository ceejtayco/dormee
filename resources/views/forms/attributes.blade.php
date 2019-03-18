 <label class="col-md-4 control-label" for="attributes">Attributes</label>  
      <div class="col-md-4">
        <div class="slidecontainer">
          Cleanliness <input type="range" min="1" max="5" name="slider1" value="1" class="slider" id="slider1">
          <p>Value: <span id="value1"></span></p>
        </div>
        <div class="slidecontainer">
        Safety <input type="range" min="1" max="5" name="slider2" value="1" class="slider" id="slider2">
          <p>Value: <span id="value2"></span></p>
        </div>
        <div class="slidecontainer">
          Ambiance <input type="range" min="1" max="5" name="slider3" value="1" class="slider" id="slider3">
          <p>Value: <span id="value3"></span></p>
        </div>
        <div class="slidecontainer">
          Facilities <input type="range" min="1" max="5" name="slider4" value="1" class="slider" id="slider4">
          <p>Value: <span id="value4"></span></p>
        </div>
        <div class="slidecontainer">
          Access to Transport <input type="range" min="1" max="5" name="slider5" value="1" class="slider" id="slider5">
          <p>Value: <span id="value5"></span></p>
        </div>
        @include('static.js')
        <script type="text/javascript">
          $(document).ready(function() {
            var slider1 = document.getElementById("slider1");
            var output1 = document.getElementById("value1");
            var slider2 = document.getElementById("slider2");
            var output2 = document.getElementById("value2");
            var slider3 = document.getElementById("slider3");
            var output3 = document.getElementById("value3");
            var slider4 = document.getElementById("slider4");
            var output4 = document.getElementById("value4");
            var slider5 = document.getElementById("slider5");
            var output5 = document.getElementById("value5");
            output1.innerHTML = slider1.value;
            output2.innerHTML = slider2.value;
            output3.innerHTML = slider3.value;
            output4.innerHTML = slider4.value;
            output5.innerHTML = slider5.value;

            slider1.oninput = function() {
              output1.innerHTML = this.value;
            }
            slider2.oninput = function() {
              output2.innerHTML = this.value;
            }
            slider3.oninput = function() {
              output3.innerHTML = this.value;
            }
            slider4.oninput = function() {
              output4.innerHTML = this.value;
            }
            slider5.oninput = function() {
              output5.innerHTML = this.value;
            }

          });

        </script>

        

      </div>