regionTooltipSelected()
function regionTooltipSelected() {
    const region = find('.region__map-region._selected')
    regionTooltip(region)
}

regionTooltipHover()
function regionTooltipHover() {
    const regionElems = findAll('.region__map-region')
    const map = find('.region__map')

    for (let i = 0; i < regionElems.length; i++) {
        const region = regionElems[i];
        region.addEventListener('mouseenter', () => {
            regionTooltip(region)
        })
    }

    map.addEventListener('mouseover', () => {
        regionTooltipSelected()
    })
}

function regionTooltip(region) {
    const regionInfo = region.getBoundingClientRect()
    const regionTop = regionInfo.top
    const regionLeft = regionInfo.left

    const tooltip = find('.region__tooltip')
    tooltip.style.top = window.pageYOffset + regionTop + 'px'
    tooltip.style.left = regionLeft + 'px'

    const regionTitle = region.dataset.regionTitle
    const tooltipTitle = find('.region__tooltip-title')
    tooltipTitle.innerText = regionTitle
}

regionMap()
function regionMap() {
    const partElems = findAll('.region__map-region:not(._disabled)')
    for (let i = 0; i < partElems.length; i++) {
        const part = partElems[i];
        part.addEventListener('click', () => {
            const regionID = part.dataset.regionId
            removeAll(partElems, '_selected')
            part.classList.add('_selected')

            let formData = new FormData()
            formData.append('id', regionID)

            requestOnDB()
            async function requestOnDB() {
                const response = await fetch('regions.php', {
                    method: 'POST',
                    body: formData
                })
                
                const result = await response.json()
                handlerData(result)
            }
        })
    }
}

function handlerData(data) {
    const citiesContainer = find('.region__list')
    const citiesIMG = find('.region-img')
    const citiesSubtitle = find('.region-subtitle')

    citiesSubtitle.innerText = data.post

    citiesContainer.innerHTML = ''

    for (let i = 0; i < data.length; i++) {
        const elem = data[i];
        if (i === 0) {
            const regionSubtitle = find('.region-subtitle')
            regionSubtitle.innerText = elem.name
        }
        else if (i === data.length - 1) {
            citiesIMG.innerHTML = `
            <img 
                width="460" 
                height="307" 
                src="${elem.guid}" 
                class="attachment-460xauto size-460xauto wp-post-image" 
                alt="${elem.post_title}" 
                loading="lazy" 
                sizes="(max-width: 460px) 100vw, 460px" 
                data-lazy-loading="${elem.guid}"
            >
            `
        }
        else {
            const cityElem = document.createElement('li')
            cityElem.innerHTML = `<a href="${elem.guid}" title="${elem.post_title}">${elem.post_title}</a>`
    
            citiesContainer.append(cityElem)
        }
    }
}