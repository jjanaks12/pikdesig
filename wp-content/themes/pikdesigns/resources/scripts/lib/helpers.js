
/**
 * 
 * @param {FormData} formData 
 * @returns {Object} data
 */
export const formDataToJSON = (formData) => {
    const data = {}
    formData.forEach(function (value, key) {
        data[key] = value
    })
    return data
}