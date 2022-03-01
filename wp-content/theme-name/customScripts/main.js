/**
 * toogle category filter for mobile front page  
 */
 function showCategoryFilterMenu() {
	const filterButton = document.querySelector('#categoryFilterButton');
	const categoryList = document.querySelector('.categoryFilterList .lae-taxonomy-filter');

	categoryList.classList.add('hide');

	filterButton.addEventListener('click', () => {

		if (categoryList.classList.contains('hide')) {
			categoryList.classList.remove('hide');			
			filterButton.style.color = "#FF0064";					
		}
		else {
			categoryList.classList.add('hide')			
			filterButton.style.color = "#fff";
		}
	})

} showCategoryFilterMenu();
