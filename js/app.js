
const btns = document.querySelectorAll('.prod-link')

btns.forEach(buyBtn => buyBtn.addEventListener('click', (e)=>{
	const id = e.target.dataset.id
	console.log(id)
	addToBasket(id)
}))

function addToBasket(id) {
	return fetch('index.php?c=cart&act=add&id='+id, {
		method: 'POST',
		body: {itemId: id},
		headers: {'Content-Type': 'application/x-www-form-urlencoded, charset=utf-8'}
	})
		.then(response => {
			if (response.ok) {
				return response.json()
			}
		})
		.then(data => {
			console.log(data)
		})
		.catch(()=> console.log('ошибка!'))
}