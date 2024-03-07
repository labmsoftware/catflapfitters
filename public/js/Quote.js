function displayOptions(value) {
    let door = document.getElementById("door");
    let glass = document.getElementById("glass");

    if (value === "Door")
    {
        door.className = door.className.replace("hidden", "");
        glass.classList.add("hidden");
    }
    else if (value === "Glass")
    {
        door.classList.add("hidden");
        glass.className = glass.className.replace("hidden", "");
    }
   }