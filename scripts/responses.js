function getBotResponse(input) {
    if ((input == "Hello") || (input == "hello") || (input == "HELLO")) {
        return "Hello there!";
    } else if ((input == "Goodbye") || (input == "goodbye") || (input == "GOODBYE")) {
        return "Talk to you later!";
    } else {
        return "Try asking something else!";
    }
}