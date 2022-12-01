import React from 'react';

const InfoSoftwares = ({infoSoftware}) => {
    return (
        <div>
            <a href="#" className="flex flex-col items-center bg-white border rounded-lg md:flex-row md:max-w-xl md:h-48 hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img src={`../images/software/${infoSoftware.ID_Software}.png`} className="object-cover w-40 h-33 rounded-t-lg md:h-40 md:w-48 md:rounded-none md:rounded-l-lg" alt="#" />
                <div className="flex flex-col justify-between p-4 leading-normal">
                    <h5 className="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{infoSoftware.Nombre_Software}</h5>
                    <p className="mb-3 font-normal text-gray-700 dark:text-gray-400">{infoSoftware.Descripcion_Software}</p>
                </div>
            </a>
        </div>
    );
}

export default InfoSoftwares;
