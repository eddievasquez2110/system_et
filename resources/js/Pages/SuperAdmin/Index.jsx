import Navbar from '@/Layouts/Navbar';
import { Head } from '@inertiajs/inertia-react';
import DashCircle from '@/Components/DashCircle';
import DashBar from '@/Components/DashBar';
import NavbarSAdmin from '@/Layouts/NavBarSAdmi';

export default function Index({auth}) {
    return (
        <NavbarSAdmin auth={auth}>
            <Head title='SuperAdmin'/>
            <div className='flex flex-col'>
                <div className='wrapper flex flex-wrap justify-center mt-8 gap-4 pb-5'>
                    <DashCircle></DashCircle>
                    <DashCircle></DashCircle>
                    <DashCircle></DashCircle>
                </div>
                
            </div>
        </NavbarSAdmin>
    );
}