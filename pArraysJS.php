<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>All arrays</title>
    <style>
.column-container {
    column-count: 3; /* Número de columnas deseado */
    column-gap: 20px; /* Espacio entre las columnas */
}

.column-item {
    break-inside: avoid; /* Evita que los elementos se dividan en dos columnas */
    margin-bottom: 20px; /* Espacio entre los elementos */
    padding: 10px; /* Espacio dentro de cada elemento */
    border: 1px solid #ddd; /* Borde para los elementos */
}

    </style>
</head>
<body>
    <div class="column-container" >
        	<div  class="column-item">
        		<h1>Arry lenght</h1>
        		<p>The length property returns the length of an array:</p>
        		<p id="demo"></p>
        		<script>
        		const fruits = ["Banana", "Orange", "Apple", "Mango","a"];
        		let size = fruits.length;
        		document.getElementById("demo").innerHTML = size;
        		</script>
        	</div >
        		
        <div  class="column-item">
        		<h1>Array 	toString</h1>
        		<p id="s"></p>
        		<script>
        		const names = ["Peter", "Alejandro", "Pablo", "Pa"];
        		document.getElementById("s").innerHTML = names.toString();
        		</script>

        		<h2>The join() Method</h2>		
        		<p id="a"></p>

        		<script>
        		const Color = ["Red", "Black", "Green"];
        		document.getElementById("a").innerHTML = Color.join(" * ");
        		</script>
        	</div>
                <br>
        <div  class="column-item">
            <h2>The pop() Method</h2>
            <p id="b"></p>
            <p id="c"></p>

            <script>
                const po = ["pa", "Osrange", "Apple", "Mango"];
                document.getElementById("b").innerHTML = "Array original: " + po;
                po.pop();
                document.getElementById("c").innerHTML = "Array después de pop(): " + po;
            </script>

            <h2>The pop() Method</h2>

            <p id="d"></p>
            <p id="e"></p>

            <script>
            const games = ["halo", "fifa", "fornite", "call of duty"];
            document.getElementById("d").innerHTML = games.pop();
            document.getElementById("e").innerHTML = games;
            </script>
        </div>

        <div  class="column-item">
            <h2>The push() Method</h2>    
            <p id="f"></p>
            <p id="g"></p>

            <script>
            const veg = ["Banana", "Orange", "Apple", "Mango"];
            document.getElementById("f").innerHTML = fruits;
            fruits.push("Kiwi");
            document.getElementById("g").innerHTML = fruits;
            </script>
            <br>
            <p>otro ejemplo:
            </p>
            <p id="h"></p>
            <p id="i"></p>

            <script>
            const fru = ["Banana", "Orange", "Apple", "Mango"];
            document.getElementById("h").innerHTML = fru.push("Kiwi");
            document.getElementById("i").innerHTML = fru;
            </script>
        </div>

        <div  class="container">
            <h2>The shift() Method</h2>    
            <p id="demp1"></p>
            <p id="demp2"></p>
            <br>
            <p id="demp3"></p>
            <p id="demp4"></p>

            <script>
            const pl = ["Banana", "Orange", "Apple", "Mango"];
            document.getElementById("demp1").innerHTML = pl;
            pl.shift();
            document.getElementById("demp2").innerHTML = pl;
            document.getElementById("demp3").innerHTML = pl.shift();
            document.getElementById("demp4").innerHTML = pl;

            </script>
            <br>
        </div>

        <div  class="container">
            <h2>The unshift() Method</h2>    
            <p id="m"></p>
            <p id="n"></p>

            <script>
            const pi = ["Banana", "Orange", "Apple", "Mango"];
            document.getElementById("m").innerHTML = pi;
            pi.unshift("Lemon");
            document.getElementById("n").innerHTML = pi;
            document.getElementById("m").innerHTML = pi.unshift("Lemon");
            document.getElementById("n").innerHTML = pi;
            </script>
        </div>

        <div  class="container">
            <h2>Bracket Indexing</h2>    
            <p id="pu1"></p>
            <p id="pu2"></p>

            <script>
            const ce = ["Banana", "Orange", "Apple", "Mango"];
            document.getElementById("pu1").innerHTML = ce;
            ce[0] = "Kiwi";
            document.getElementById("pu2").innerHTML = ce;
            </script>
        </div>

        <div  class="container">
            <h2>The length Property</h2>
            <p id="demo12"></p>
            <p id="demo21"></p>

            <script>
            const ku = ["Banana", "Orange", "Apple", "Mango"];
            document.getElementById("demo12").innerHTML = ku;
            ku[ku.length] = "Kiwi";
            document.getElementById("demo21").innerHTML = ku;
            </script>
        </div>

        <div  class="container">
            <h2>The length Property</h2>    
            <p id="ui"></p>
            <p id="ui2"></p>

            <script>
            const ichi = ["Banana", "Orange", "Apple", "Mango"];
            document.getElementById("ui").innerHTML = ichi;
            ichi[ichi.length] = "Kiwi";
            document.getElementById("ui2").innerHTML = ichi;
            </script>
        </div>

        <div  class="container">
            <h2>The delete Method</h2>
            <p id="oi"></p>
            <p id="oi1"></p>

            <script>
                const ni = ["Banana", "Orange", "Apple", "Mango"];

                document.getElementById("oi").innerHTML =
                    "The first fruit is: " + ni[0];

                delete ni[0];

                document.getElementById("oi1").innerHTML =
                    "The first fruit is: " + ni[0];
            </script>
        </div>

        <div  class="container">
            <h2>The concat() Method</h2>
            <p id="san"></p>
            <p id="shi"></p>
            <p id="go"></p>

            <script>
            const myGirls = ["Cecilie", "Lone"];
            const myBoys = ["Emil", "Tobias", "Linus"];
            const myChildren = myGirls.concat(myBoys);
            document.getElementById("san").innerHTML = myChildren;

            const array1 = ["Cecilie", "Lone"];
            const array2 = ["Emil", "Tobias", "Linus"];
            const array3 = ["Robin", "Morgan"];
            const myChildrens = array1.concat(array2, array3); 
            document.getElementById("shi").innerHTML = myChildrens;

            const myArray = ["Emil", "Tobias", "Linus"];
            const myChildrens1 = myArray.concat("Peter"); 
            document.getElementById("go").innerHTML = myChildrens1;
            </script>
        </div>
            <br>
        <div  class="container">
            <h2>The flat() Method</h2>

            <p id="roku"></p>

            <script>
            const myArr = [[1,2],[3,4],[5,6],[7,8]];

            const newArr = myArr.flat();
            document.getElementById("roku").innerHTML = newArr;
            </script>
        </div>

        <div  class="container">
            <h2>The splice() Method</h2>    
            <p id="nana"></p>
            <p id="shichi"></p>
            <p id="hachi"></p>
            <p id="ku"></p>
            <p id="kyuu"></p>

            <script>
                const goi = ["Banana", "Orange", "Apple", "Mango"];
                document.getElementById("nana").innerHTML = goi;
                goi.splice(2, 0, "Lemon", "Kiwi");
                document.getElementById("shichi").innerHTML = goi;

                document.getElementById("hachi").innerHTML = "Original Array:<br> " + goi;
                let removed = goi.splice(2, 2, "Lemon", "Kiwi"); 
                document.getElementById("ku").innerHTML = "New Array:<br>" + goi;
                document.getElementById("kyuu").innerHTML = "Removed Items:<br> " + removed; 
            </script>
        </div>

        <div  class="container">
            <h2>The slice() Method</h2>    
            <p id="juu"></p>
            <p id="juuichi"></p>
            <p id="juuni"></p>
            <p id="juusan"></p>

            <script>
            const ROKU = ["Banana", "Orange", "Lemon", "Apple", "Mango"];
            const citrus = ROKU.slice(1);
            document.getElementById("juu").innerHTML = ROKU + "<br><br>" + citrus;    

            const cio = ROKU.slice(3);
            document.getElementById("juuichi").innerHTML = ROKU + "<br><br>" + cio;

            const cit = fruits.slice(1,3);
            document.getElementById("juuni").innerHTML = ROKU + "<br><br>" + cit;

            const citr = fruits.slice(2);
            document.getElementById("juusan").innerHTML = ROKU + "<br><br>" + citr;
            </script>
        </div>

        <div  class="container">
            <h2>The toString() Method</h2>
            <p id="juushi"></p>
            <p id="juugo"></p>

            <script>
                const lap = ["Banana", "Orange", "Apple", "Mango"];
                document.getElementById("juushi").innerHTML = lap.toString();

                document.getElementById("juugo").innerHTML = lap;
            </script>
        </div>
</div>
</body>
</html>