import React from 'react';
import { Head } from '@inertiajs/inertia-react';
import DashCircle from '@/Components/DashCircle';
import DashBar from '@/Components/DashBar';


export default function Dashboard(props) {
    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard {props.auth.user.name}</h2>}
        >

        <Head title="SuperAdmin" />
            <div className='grid grid-rows-2'>
                <div className='grid grid-cols-3'>
                    <div className=''>
                        <DashCircle></DashCircle>
                    </div>
                    <div className=''>
                        <DashCircle></DashCircle>
                    </div>
                    <div className=''>
                        <DashCircle></DashCircle>
                    </div>
                </div>
                
                <div className=''>
                <DashBar></DashBar>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
