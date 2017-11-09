function solve(input) {
    let allContent = input.join(" ");
    let redSplitter = /[^a-zA-Z]+/;
    let upperCase = allContent.split(redSplitter);

    console.log(upperCase
        .filter(e => !e.match(redSplitter))
        .filter(e => e === e.toUpperCase())
        .filter(e => e)
        .join(", ")
    )

}