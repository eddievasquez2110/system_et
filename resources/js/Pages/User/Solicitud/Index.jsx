import React, { useState } from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/inertia-react';
import Table from '@/Components/Table';
import { Inertia } from '@inertiajs/inertia';
import Solicitudes from './Solicitudes';
import Pagination from '@/Components/Pagination';


const Index = ({auth,solis}) => {
    return (
        <AuthenticatedLayout auth={auth}>
              <Head title="Solicitudes" />
                <div className='flex mt-5 h-20 bg-gradient-to-r from-slate-100 to-slate-200 justify-center place-items-center gap-10'>
                    <h1 className='text-green-600 text-lg'><strong>SOLICITUDES</strong></h1>
                </div>
                
                <div className="wrapper flex flex-wrap justify-center items-center gap-5 mt-8 pb-10">
                
                    <div className="overflow-x-auto relative shadow-md rounded-lg mt-5">
                        <table className="w-full text-xs md:text-sm text-left text-gray-500 ">
                            <thead className="text-xs text-white uppercase bg-green-700">
                                <tr>
                                    <th scope="col" className="py-3 px-3 md:px-4" style={{borderRight: '1px solid white'}}>
                                            ID
                                    </th>
                                    <th scope="col" className="py-3 px-3 md:px-4 " style={{borderRight: '1px solid white'}}>
                                            Nombre
                                    </th>
                                    <th scope="col" className="py-3 px-3 md:px-4 " style={{borderRight: '1px solid white'}}>
                                            Correo
                                    </th>
                                    <th scope="col" className="py-3 px-3 md:px-4 " style={{borderRight: '1px solid white'}}>
                                            Proyecto
                                    </th>
                                    <th scope="col" className="py-3 px-1 md:px-4" style={{borderRight: '1px solid white'}}>
                                        <div className="flex items-center">
                                            Fecha
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" className="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                                        </div>
                                    
                                    </th>
                                    <th scope="col" className="py-3 px-3 md:px-4" style={{borderRight: '1px solid white'}}>
                                        Estado
                                    </th>
                                    <th scope="col" className="py-3 px-3 md:px-4">
                                        <div className="flex justify-center items-center">
                                        Accion
                                        </div>
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                {
                                    solis.data.map(soli => {
                                        return( 
                                            <Solicitudes soli={soli} key={soli.ID_Solicitud}/>
                                        )
                                    })
                                }
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                
            
            <Pagination className="mt-2" links={solis.links} />
        </AuthenticatedLayout>
    )
}

export default Index
