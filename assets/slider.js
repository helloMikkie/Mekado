

const ImageHolders = document.querySelectorAll('.slider-item')


const observer = new IntersectionObserver(entries => {
	entries.forEach(entry => {
		if(entry.intersectionRatio >= 0.6){
			entry.target.classList.add('in-view')
		}  else{
			entry.target.classList.remove('in-view')
		}
	})

}, {
	threshold: [0, 0.3, 1],
	rootMargin: '290px'
})


ImageHolders.forEach(holder => {
	observer.observe(holder)
})