const formElems = findAll('.form')

for (let i = 0; i < formElems.length; i++) {
    const form = formElems[i];
    form.addEventListener('submit', async (e) => {
        e.preventDefault()

        const reqInputElems = form.querySelectorAll('input._req, textarea._req')
        let reqInputCompleted = true

        for (let i = 0; i < reqInputElems.length; i++) {
            const input = reqInputElems[i];
            
            if (input.value == '') {
                input.parentElement.classList.add('_error')
                reqInputCompleted = false
                console.log(input.value)
            }
            else {
                input.parentElement.classList.remove('_error')
            }
        }

        if (reqInputCompleted) {
            inputSubmitLoader(form, true)
            const formData = new FormData(form)
            const urlHandler = form.getAttribute('action')
        
            let response = await fetch(urlHandler, {
                method: 'POST',
                body: formData
            })
        
            if (response.ok) {
                inputSubmitLoader(form, false)
                console.log(await response.json())
                form.reset()

                const inputValidElems = form.querySelectorAll('input, textarea')

                for (let i = 0; i < inputValidElems.length; i++) {
                    const input = inputValidElems[i];
                    input.parentElement.classList.remove('_valid')
                }
    
                // const modal = find('.modal._show')
                // if (modal) {
                //     modal.classList.remove('_show')
                // }
            }
            else {
                inputSubmitLoader(form, false)
                console.log(await response.json())
            }
        }
    })
}