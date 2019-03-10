
<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1{
  background-color: red; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;  
}

</style>
</head>
<body>

<h2>Select a parking slot</h2>
<pre>Note: 
      1)Green colored slots are free.
      2)Red colored slots are occupied.
</pre>

<button class="button1" id="R1A" onclick="alert1()">R1A</button>
<button class="button1" id="R1B" onclick="alert1()">R1B</button>
<button class="button1" id="R1C" onclick="alert1()">R1C</button>
<button class="button1" id="R1D" onclick="alert1()">R1D</button>
<button class="button" id="R1E" onclick="booked()">R1E</button>
<button class="button" id="R1F" onclick="booked()">R1F</button>
<button class="button" id="R1G" onclick="booked()">R1G</button>
<button class="button" id="R1H" onclick="booked()">R1H</button>
<button class="button" id="R1I" onclick="booked()">R1I</button>
<button class="button" id="R1J" onclick="booked()">R1J</button>
<button class="button" id="R1K" onclick="booked()">R1K</button>
<button class="button" id="R1L" onclick="booked()">R1L</button>
<button class="button" id="R1M" onclick="booked()">R1M</button>
<button class="button" id="R1N" onclick="booked()">R1N</button>

<pre>
<h2>Faculty</h2>
___________________________________________________________________________________________________________________________________________________________________________________________________________



___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___



___________________________________________________________________________________________________________________________________________________________________________________________________________

<h2>Students</h2>
</pre>

<button class="button1" id="R2A" onclick="alert1()">R2A</button>
<button class="button1" id="R2B" onclick="alert1()">R2B</button>
<button class="button1" id="R2C" onclick="alert1()">R2C</button>
<button class="button" id="R2D" onclick="booked()">R2D</button>
<button class="button" id="R2E" onclick="booked()">R2E</button>
<button class="button" id="R2F" onclick="booked()">R2F</button>
<button class="button" id="R2G" onclick="booked()">R2G</button>
<button class="button" id="R2H" onclick="booked()">R2H</button>
<button class="button" id="R2I" onclick="booked()">R2I</button>
<button class="button" id="R2J" onclick="booked()">R2J</button>
<button class="button" id="R2K" onclick="booked()">R2K</button>
<button class="button" id="R2L" onclick="booked()">R2L</button>
<button class="button" id="R2M" onclick="booked()">R2M</button>
<button class="button" id="R2N" onclick="booked()">R2N</button>
<button class="button1" id="R3A" onclick="alert1()">R3A</button>
<button class="button1" id="R3B" onclick="alert1()">R3B</button>
<button class="button1" id="R3C" onclick="alert1()">R3C</button>
<button class="button1" id="R3D" onclick="alert1()">R3D</button>
<button class="button1" id="R3E" onclick="alert1()">R3E</button>
<button class="button" id="R3F" onclick="booked()">R3F</button>
<button class="button" id="R3G" onclick="booked()">R3G</button>
<button class="button" id="R3H" onclick="booked()">R3H</button>
<button class="button" id="R3I" onclick="booked()">R3I</button>
<button class="button" id="R3J" onclick="booked()">R3J</button>
<button class="button" id="R3K" onclick="booked()">R3K</button>
<button class="button" id="R3L" onclick="booked()">R3L</button>
<button class="button" id="R3M" onclick="booked()">R3M</button>
<button class="button" id="R3N" onclick="booked()">R3N</button>
<pre>
<h2>Students</h2>
___________________________________________________________________________________________________________________________________________________________________________________________________________



___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___   ___



___________________________________________________________________________________________________________________________________________________________________________________________________________

<h2>Handicapped</h2>
</pre>

<button class="button1" id="R4A" onclick="alert1()">R4A</button>
<button class="button1" id="R4B" onclick="alert1()">R4B</button>
<button class="button1" id="R4C" onclick="alert1()">R4C</button>
<button class="button1" id="R4D" onclick="alert1()">R4D</button>
<button class="button1" id="R4E" onclick="alert1()">R4E</button>
<button class="button" id="R4F" onclick="booked()">R4F</button>
<button class="button" id="R4G" onclick="booked()">R4G</button>
<button class="button" id="R4H" onclick="booked()">R4H</button>
<button class="button" id="R4I" onclick="booked()">R4I</button>
<button class="button" id="R4J" onclick="booked()">R4J</button>
<button class="button" id="R4K" onclick="booked()">R4K</button>
<button class="button" id="R4L" onclick="booked()">R4L</button>
<button class="button" id="R4M" onclick="booked()">R4M</button>
<button class="button" id="R4N" onclick="booked()">R4N</button>

<script type="text/javascript">
  
  function alert1(){
    alert("This spot is already booked.");
  }

  function booked(){
    alert("Congratulations. Your spot is booked.");
  }

</script>

</body>


</html>
