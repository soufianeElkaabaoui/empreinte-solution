const accordationItems = document.querySelectorAll('.value__accordation-item');

accordationItems.forEach((item) =>{
    
    const accordationHeader = item.querySelector('.value__accordation-header');

    accordationHeader.addEventListener('click', ()=>{

        const openItem = document.querySelector('.accordation-open');

        toggleItem(item);

        if(openItem && openItem !== item){
            toggleItem(openItem);
        }
    });
    
});

const toggleItem = (item) =>{

    const accordationContent = item.querySelector('.value__accordation-content');


    if (item.classList.contains('accordation-open')) {
        accordationContent.removeAttribute('style');
        item.classList.remove('accordation-open');
    }
    else{
        accordationContent.style.height = accordationContent.scrollHeight + 'px';
        item.classList.add('accordation-open');
    }
}
