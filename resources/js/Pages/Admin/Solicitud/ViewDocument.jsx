import React, { useState } from 'react';
import { Head, Link } from '@inertiajs/inertia-react';
import DocumentPDF from '@/Components/Solicitud/DocumentPDF';

const ViewDocument = ({auth,solis}) => {

    return (

      <div>
        <Head title='Visualizar PDF'/>

        {
              <DocumentPDF key={solis.ID_Solicitud} solis={solis}></DocumentPDF>
        }
      </div> 
  )
}

export default ViewDocument

