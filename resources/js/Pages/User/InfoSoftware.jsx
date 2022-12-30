import React from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/inertia-react';
import InfoSoftwares from '@/Components/InfoSoftwares';


const InfoSoftware = ({auth, infoSoftwares}) => {
    
    return (

        <AuthenticatedLayout auth={auth}>
        <Head title="Softwares" />
            <div className='flex mt-5 h-20 bg-gradient-to-r from-slate-100 to-slate-200 place-items-center'>
                <h1 className='flex justify-center grow ml-60 text-green-600 text-lg'><strong>LISTA DE SOFTWARES</strong></h1>
            <div className='mr-10'>
                    <Link
                        className="px-6 py-2 text-white bg-green-500 rounded-md focus:outline-none"
                        href={route("d.usersoftwares.create")}
                        >
                        Agregar nuevo 
                    </Link>
                </div>
            </div>
             <div className="wrapper flex flex-wrap items-center justify-center gap-5 mt-8">
                {
                    infoSoftwares.map(infoSoftware =>
                        <InfoSoftwares key={infoSoftware.ID_Software} infoSoftware={infoSoftware}/>
                        )
                }              
            </div>
        </AuthenticatedLayout>
    );
    
}

export default InfoSoftware;
