const totalReceipesElment = document.querySelector('.total-receipes')
async function totalReceipes() {
    let total = await fetch('/api/receipes')
    total = await total.json()
    totalReceipesElment.innerHTML = total.total_receipes
}
totalReceipes()