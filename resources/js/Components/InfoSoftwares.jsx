import { Link } from '@inertiajs/inertia-react';
import React from 'react';
import PrimaryButton from './PrimaryButton';

const InfoSoftwares = ({infoSoftware}) => {
    return (
        <div className='w-full flex place-content-center pb-5'>
            <a href="#" className="flex flex-col items-center bg-white border-2 border-green-300 rounded-lg md:flex-row md:max-w-xl md:h-48 hover:bg-gray-100 ">
                <img src={`../images/software/${infoSoftware.ID_Software}.png`} className="object-cover w-40 h-33 rounded-t-lg md:h-40 md:w-48 md:rounded-none md:rounded-l-lg" alt="#" />
                <div className="justify-between p-4 leading-normal">
                    <h5 className="mb-2 text-2xl font-bold tracking-tight text-green-700">{infoSoftware.Nombre_Software.toUpperCase()}</h5>
                    <p className="mb-3 font-normal text-gray-700 dark:text-gray-400">{infoSoftware.Descripcion_Software}</p>

                </div>
                
            </a>
            
            <PrimaryButton className=''>Ver Especificacion</PrimaryButton>
                
        </div>
    );
}

export default InfoSoftwares;
