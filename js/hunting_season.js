var animal_counter = document.getElementById("animal_counter");
var counter_text = animal_counter.children[0];
var storage = document.getElementById("submit_score");
var animal_spawner = document.getElementById("animal_spawner");

var name_ = document.getElementById("input_name");
var mail_ = document.getElementById("input_email");
var terms_ = document.getElementById("input_terms");
var term_text = document.getElementById("input_terms_text");

var score_table = document.getElementById("score_table");

// Initial speed of animals
var speed = 3;

// on start game button pressed
function on_start_button(){
    if (animal_spawner.children.length == 0){
        animal_counter.style.display = "block";  // unhide score
        create_animal();
        speed = 3;
        counter_text.textContent = "0";  // set score to 0
        animal_counter.style.backgroundColor = "white";
    }
}

// on end game button pressed
function on_score_button(){
    storage.value = String(counter_text.textContent)
    animal_counter.style.display = "none";  //hide score
    animal_spawner.children[0].remove();  // delete remaining animals
    add_score_entry()
}

// on animal button pressed
function on_kill_animal(element){
    element.remove();
    create_animal();
    speed += 0.5;
    counter_text.textContent = String(parseInt(counter_text.textContent) + 1);
}

// spawn new animal
function create_animal(){
    // asign values to img
    let animal = document.createElement("img");
    animal.src = `./img/Ecosystem/animal${Math.floor(Math.random() * 4)}.png`;
    animal.className = "animal";
    animal.setAttribute("onclick","on_kill_animal(this);");
    animal.style.top = String(Math.floor(Math.random() * (document.documentElement.scrollHeight - 500))) + "px";
    animal.style.left = `-${(10 * animal_spawner.offsetWidth) / 100 +100}px`;
    animal.id = 'normal';

    // 50% chance of going from right-to-left else left-to-right
    if (Math.random() > 0.5){
        animal.style.transform = "scale(-1, 1)";
        animal.id = 'reversed';
        animal.style.left = String(animal_spawner.offsetWidth + (10 * animal_spawner.offsetWidth) / 100) + "px";
    }

    animal_spawner.appendChild(animal);
}

// update animal
function update_animal(){

    let border_offset = document.body.clientWidth * 0.1;  //aproximate width of animals
    let spd = parseInt(speed);

    let index = 0; // index of currently updated animal
    for (const child of animal_spawner.children) {  
        // move animal in correct direction
        let x = parseInt(child.style.left);
        if (child.id == "reversed"){
            x -= spd;
            if (x < -border_offset){
                child.remove();
                animal_counter.style.backgroundColor = "red";
                add_score_entry()
            }
        }else{
            x += spd;
            if (x > animal_spawner.offsetWidth){
                child.remove();
                animal_counter.style.backgroundColor = "red";
                add_score_entry()
            }
        }

        child.style.left = String(x)  + "px";
        index++;
    }
}

// It's in a separate function due to some visual misshaps
function alertt(){
    alert("Some fields are incorrect, they are highlited in red.")
}

// add score to page when game over
function add_score_entry(){
    document.getElementById("submit_score").click();
}

// set interval for update function
window.setInterval(update_animal, 30);