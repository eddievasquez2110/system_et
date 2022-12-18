
import React from 'react'


const DocumentPDF = ({solis}) => {

  return (
     <div>
      {
        solis.map(solic => {
            return(
              <embed src={`/images/documentos/${solic.Documento}`} 
              style={{width:'100%', height:'800px'}} ></embed>
            )
        })
      }

    </div>  
  )
}
  
export default DocumentPDF