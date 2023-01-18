import { Link } from '@inertiajs/inertia-react';
import React from 'react';
import PrimaryButton from './PrimaryButton';

const InfoSoftwares = ({infoSoftware}) => {
    return (
        <div className='flex flex-row place-content-center pb-5'>
            

                <a href={`${infoSoftware.Link_Software}`} className="p-6 flex bg-white rounded-lg shadow-md shadow-green-400/50 hover:shadow-lg hover:shadow-green-400 hover:bg-gray-50 ">
                <div className='p-3 flex items-center bg-white rounded-lg md:flex-row md:max-w-xl md:h-48 '>
                    <img src={`../images/softwares/${infoSoftware.Imagen}`} className="object-cover w-40 h-33 rounded-t-lg md:h-40 md:w-48 md:rounded-none md:rounded-l-lg" alt="#" />
                    <div className="justify-between p-4 leading-normal">
                        <h5 className="mb-2 text-2xl font-bold tracking-tight text-green-700">{infoSoftware.Nombre_Software.toUpperCase()}</h5>
                        <p className="mb-3 font-normal text-gray-700 dark:text-gray-400">{infoSoftware.Descripcion_Software}</p>    
                    </div>
                    </div>
                </a> 

                {/* <PrimaryButton className='md:w-full min-[200px]:w-full'>Ver Especificacion</PrimaryButton> */}

            
         
        </div>
    );
}

export default InfoSoftwares;
