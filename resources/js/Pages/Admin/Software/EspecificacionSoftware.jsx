import React from 'react';
import Navbar from '@/Layouts/Navbar';
import { Head } from '@inertiajs/inertia-react';
import Pagination from '@/Components/Pagination';
import List_Especificacion_Software from '@/Components/Software/List_Especificacion_Software';
export default function EspecificacionSoftware({espSoftwares,auth}) {
    return (
        <Navbar auth={auth}>
            <Head title='Admin'/>
            <div className='flex flex-col my-3'>
                <div className='flex items-center gap-8 '>
                    <span className='text-slate-500 text-3xl'>Especificaciones de Softwares</span>
                    <div className='inline my-2'>
                        <button className='px-4 py-1 text-white text-lg rounded-md bg-green-500'>Nuevo</button>
                    </div>
                </div>
                <div className='flex mt-2  items-center justify-between'>
                    <div className='flex items-center text-slate-500'>
                        Registros
                    </div>
                    <div className='flex items-center gap-4'>
                        <label className='text-slate-500'>Buscar: </label>
                        <input className='rounded-md py-1 text-slate-500' type="text" />
                    </div>
                </div>
            </div>
            <div className="overflow-x-auto  relative shadow-md sm:rounded-lg">
                <table className="w-full text-sm text-left text-gray-500 ">
                    <thead className="text-xs text-white uppercase bg-green-700">
                        <tr>
                            <th scope="col" className="py-3 px-6" style={{borderRight: '1px solid white'}}>
                                ID
                            </th>
                            <th scope="col" className="py-3 px-6" style={{borderRight: '1px solid white'}}>
                                Software
                            </th>
                            <th scope="col" className="py-3 px-6" style={{borderRight: '1px solid white'}}>
                                Uso Equipo
                            </th>
                            <th scope="col" className="py-3 px-6" style={{borderRight: '1px solid white'}}>
                                <div className="flex items-center">
                                    Nombre de Especificacion 
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" className="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                                </div>
                            </th>
                            <th scope="col" className="py-3 px-6" style={{borderRight: '1px solid white'}}>
                                <div className="flex items-center">
                                    Especificacion 
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" className="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                                </div>
                            </th>
                            <th scope="col" className="py-3 px-2">
                                <div className="flex justify-center items-center">
                                Accion
                                </div>
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody>

                        {console.log(espSoftware)}
                        {
                            espSoftwares.data.map(espSoftware => {
                                return(
                                    <List_Especificacion_Software  espSoftware={espSoftware}  key={espSoftware.ID_Especificacion_Software}/>
                                )
                            })
                        }
                    
                    </tbody>
                </table>
            </div>
            <Pagination class="mt-2" links={espSoftwares.links} />
        </Navbar>
    );
}