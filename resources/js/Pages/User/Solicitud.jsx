import React from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/inertia-react';
import Software from '@/Components/Software';
import PrimaryButton from '@/Components/PrimaryButton';

const Solicitud = ({auth,softwares}) => {
    return (
      <AuthenticatedLayout auth={auth}>
        <Head title="Solicitud" />
        <div className='w-600 bg-green-300 justify-center items-center '>
        
            <div className="wrapper flex flex-wrap justify-center items-center gap-5 mt-8">
                {
                    softwares.map(software =>
                        <Software key={software.ID_Software} software={software}/>
                        )
                }            
            </div>
            <div>
                <PrimaryButton>Continuar</PrimaryButton>
            </div>
        </div>
      </AuthenticatedLayout>
    )
  }

export default Solicitud